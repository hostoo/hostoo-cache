<?php
/**
 * Plugin Name:       Hostoo Cache
 * Description:       High-performance page caching and site optimization from Hostoo
 * Version:           2.3.2
 * Author:            Hostoo
 * Author URI:        https://hostoo.io/
 * License:           GPLv3
 * License URI:       http://www.gnu.org/licenses/gpl.html
 * Text Domain:       hostoo
 * Domain Path:       /lang
 */
defined('WPINC') || exit;

if (defined('HCWP_V')) {
    return;
}

! defined('HCWP_V') && define('HCWP_V', '2.3.2');

! defined('HCWP_CONTENT_DIR') && define('HCWP_CONTENT_DIR', WP_CONTENT_DIR) ;
! defined('HCWP_DIR') && define('HCWP_DIR', __DIR__ . '/') ;// Full absolute path '/var/www/html/***/wp-content/plugins/hostoo-cache/' or MU
! defined('HCWP_BASENAME') && define('HCWP_BASENAME', 'hostoo-cache/hostoo-cache.php') ;//HCWP_BASENAME='hostoo-cache/hostoo-cache.php'

/**
 * This needs to be before activation because admin-rules.class.php need const `HCWP_CONTENT_FOLDER`
 * This also needs to be before cfg.cls init because default cdn_included_dir needs `HCWP_CONTENT_FOLDER`
 * @since  1.9.1 Moved up
 * @since  2.2.1 Moved up from core.cls
 */
! defined('HCWP_CONTENT_FOLDER') && define('HCWP_CONTENT_FOLDER', str_replace(home_url('/'), '', WP_CONTENT_URL)) ; // `wp-content`
! defined('HWCP_PLUGIN_URL') && define('HWCP_PLUGIN_URL', plugin_dir_url(__FILE__)) ;// Full URL path '//example.com/wp-content/plugins/hostoo-cache/'

/**
 * Static cache files consts
 * @since  3.0
 */
! defined('HOSTOO_STATIC_URL') && define('HOSTOO_STATIC_URL', WP_CONTENT_URL . '/hostoo') ;// Full static cache folder URL '//example.com/wp-content/hostoo'
! defined('HOSTOO_STATIC_DIR') && define('HOSTOO_STATIC_DIR', HCWP_CONTENT_DIR . '/hostoo') ;// Full static cache folder path '/var/www/html/***/wp-content/hostoo'

! defined('HOSTOO_TIME_OFFSET') && define('HOSTOO_TIME_OFFSET', get_option('gmt_offset') * 60 * 60) ;

// Placeholder for lazyload img
! defined('HOSTOO_PLACEHOLDER') && define('HOSTOO_PLACEHOLDER', 'data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=') ;

// Auto register Hostoo classes
require_once HCWP_DIR . 'autoload.php' ;

// Define CLI
if ((defined('WP_CLI') && WP_CLI) || PHP_SAPI == 'cli') {
    ! defined('HOSTOO_CLI') &&  define('HOSTOO_CLI', true);

    // Register CLI cmd
    if (method_exists('WP_CLI', 'add_command')) {
        WP_CLI::add_command('hostoo-option', 'Hostoo\CLI\Option');
        WP_CLI::add_command('hostoo-purge', 'Hostoo\CLI\Purge');
        WP_CLI::add_command('hostoo-online', 'Hostoo\CLI\Online');
        WP_CLI::add_command('hostoo-image', 'Hostoo\CLI\Image');
        WP_CLI::add_command('hostoo-debug', 'Hostoo\CLI\Debug');
    }
}

// Server type
if (! defined('HOSTOO_SERVER_TYPE')) {
    if (isset($_SERVER['HTTP_X_LSCACHE']) && $_SERVER['HTTP_X_LSCACHE']) {
        define('HOSTOO_SERVER_TYPE', 'LITESPEED_SERVER_ADC');
    } elseif (isset($_SERVER['LSWS_EDITION']) && strpos($_SERVER['LSWS_EDITION'], 'Openlitespeed') === 0) {
        define('HOSTOO_SERVER_TYPE', 'LITESPEED_SERVER_OLS');
    } elseif (isset($_SERVER['SERVER_SOFTWARE']) && $_SERVER['SERVER_SOFTWARE'] == 'LiteSpeed') {
        define('HOSTOO_SERVER_TYPE', 'LITESPEED_SERVER_ENT');
    } else {
        define('HOSTOO_SERVER_TYPE', 'NONE');
    }
}

// Checks if caching is allowed via server variable
if (! empty($_SERVER['X-LSCACHE']) ||  HOSTOO_SERVER_TYPE === 'LITESPEED_SERVER_ADC' || defined('HOSTOO_CLI')) {
    ! defined('HOSTOO_ALLOWED') &&  define('HOSTOO_ALLOWED', true);
}

// ESI const defination
if (! defined('HWCP_ESI_SUPPORT')) {
    define('HWCP_ESI_SUPPORT', HOSTOO_SERVER_TYPE !== 'LITESPEED_SERVER_OLS' ? true : false);
}

if (! defined('HWCP_TAG_PREFIX')) {
    define('HWCP_TAG_PREFIX', substr(md5(HCWP_DIR), -3));
}

/**
 * Handle exception
 */
if (! function_exists('hostoo_exception_handler')) {
    function hostoo_exception_handler($errno, $errstr, $errfile, $errline)
    {
        throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
    }
}

/**
 * Overwride the WP nonce funcs outside of Hostoo namespace
 * @since  3.0
 */
if (! function_exists('hostoo_define_nonce_func')) {
    function hostoo_define_nonce_func()
    {
        /**
         * If the nonce is in none_actions filter, convert it to ESI
         */
        function wp_create_nonce($action = -1)
        {
            if (! defined('HOSTOO_DISABLE_ALL')) {
                $control = \Hostoo\ESI::cls()->is_nonce_action($action);
                if ($control !== null) {
                    $params = array(
                        'action'	=> $action,
                    );
                    return \Hostoo\ESI::cls()->sub_esi_block('nonce', 'wp_create_nonce ' . $action, $params, $control, true, true, true);
                }
            }

            return wp_create_nonce_hostoo_esi($action);
        }

        /**
         * Ori WP wp_create_nonce
         */
        function wp_create_nonce_hostoo_esi($action = -1)
        {
            $uid  = get_current_user_id();
            if (! $uid) {
                /** This filter is documented in wp-includes/pluggable.php */
                $uid = apply_filters('nonce_user_logged_out', $uid, $action);
            }

            $token = wp_get_session_token();
            $i     = wp_nonce_tick();

            return substr(wp_hash($i . '|' . $action . '|' . $uid . '|' . $token, 'nonce'), -12, 10);
        }
    }
}

require_once 'WPFDGitHubPluginUpdater.php';
if (is_admin()) {
    new WPFDGitHubPluginUpdater(__FILE__, 'hostoo', "hostoo-cache");
}

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
if (! function_exists('run_hostoo_cache')) {
    function run_hostoo_cache()
    {
        //Check minimum PHP requirements, which is 5.3 at the moment.
        if (version_compare(PHP_VERSION, '5.3.0', '<')) {
            return;
        }

        //Check minimum WP requirements, which is 4.0 at the moment.
        if (version_compare($GLOBALS['wp_version'], '4.0', '<')) {
            return;
        }

        \Hostoo\Core::cls();
    }

    run_hostoo_cache();
}
