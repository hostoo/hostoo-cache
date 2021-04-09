var _hostoo_meta ;
var _hostoo_shell_interval = 3 ;// seconds
var _hostoo_shell_interval_range = [3, 60] ;
var _hostoo_shell_handle ;
var _hostoo_shell_display_handle ;
var _hostoo_crawler_url ;
var _hostoo_dots ;

(function ($) {
	'use strict' ;

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * }) ;
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * }) ;
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	jQuery(document).ready(function () {
		/************** Common Hostoo JS **************/
		// Link confirm
		$('[data-hostoo-cfm]').click(function(event) {
			if(confirm($.trim($(this).data('hostoo-cfm')).replace(/\\n/g,"\n"))) {
				return true ;
			}
			event.preventDefault() ;
			event.stopImmediatePropagation() ;
			return false ;
		}) ;

		/************** HWCP JS ****************/
		// page tab switch functionality
		if($('[data-hostoo-tab]').length > 0){
			// display default tab
			var hostoo_tab_current = document.cookie.replace(/(?:(?:^|.*;\s*)hostoo_tab\s*\=\s*([^;]*).*$)|^.*$/, "$1") ;
			if(window.location.hash.substr(1)) {
				hostoo_tab_current = window.location.hash.substr(1) ;
			}
			if(!hostoo_tab_current || !$('[data-hostoo-tab="'+hostoo_tab_current+'"]').length) {
				hostoo_tab_current = $('[data-hostoo-tab]').first().data('hostoo-tab') ;
			}
			hostoo_display_tab(hostoo_tab_current) ;
			// tab switch
			$('[data-hostoo-tab]').click(function(event) {
				hostoo_display_tab($(this).data('hostoo-tab')) ;
				document.cookie = 'hostoo_tab='+$(this).data('hostoo-tab') ;
				$(this).blur() ;
			}) ;
		}

		// Manage page -> purge by
		$('[name=purgeby]').change(function(event) {
			$('[data-purgeby]').hide() ;
			$('[data-purgeby='+this.value+']').show() ;
		}) ;

		/*************** crawler ******************/
		$('#hostoo-crawl-url-btn').click(function () {
			if( ! $(this).data('url') ){
				return false ;
			}
			$('.hostoo-shell').removeClass( 'hostoo-hide' ) ;
			_hostoo_dots = window.setInterval(_hostoo_loading_dots, 300) ;
			_hostoo_crawler_url = $(this).data('url') ;
			hostoo_fetch_meta() ;
			$(this).hide() ;
		}) ;

		$('#hostoo_manual_trigger').click(function(event) {
			$('#hostoo-loading-dot').before('<li>Manually Started</li>') ;
			_hostoo_shell_interval = _hostoo_shell_interval_range[0] ;
			hostoo_fetch_meta() ;
		}) ;

		/******************** Clear whm msg ********************/
		$(document).on('click', '.hcwp-whm-notice .notice-dismiss', function () {
			$.get(hostoo_data.ajax_url_dismiss_whm) ;
		});
		/******************** Clear rule conflict msg ********************/
		$(document).on('click', '.hcwp-notice-ruleconflict .notice-dismiss', function () {
			$.get(hostoo_data.ajax_url_dismiss_ruleconflict) ;
		});

		/** Accesskey **/
		$( '[hostoo-accesskey]' ).map( function() {
			var thiskey = $( this ).attr( 'hostoo-accesskey' ) ;
			$( this ).attr( 'title', 'Shortcut : ' + thiskey.toLocaleUpperCase() ) ;
			var that = this ;
			$( document ).on( 'keydown', function( e ) {
				if( $(":input:focus").length > 0 ) return ;
				if( event.metaKey ) return ;
				if( event.ctrlKey ) return ;
				if( event.altKey ) return ;
				if( event.shiftKey ) return ;
				if( hostoo_keycode( thiskey.charCodeAt( 0 ) ) ) $( that )[ 0 ].click() ;
			});
		});

		/** Lets copy one more submit button **/
		if ( $( 'input[name="HCWP_CTRL"]' ).length > 0 ) {
			var btn = $( 'input.hostoo-duplicate-float' ) ;
			btn.clone().addClass( 'hostoo-float-submit' ).removeAttr( 'id' ).insertAfter( btn ) ;
		}
		if ( $( 'input[id="HCWP_NONCE"]' ).length > 0 ) {
			$( 'input[id="HCWP_NONCE"]' ).removeAttr( 'id' );
		}

		/** Promo banner **/
		$( '#hostoo-promo-done' ).click( function( event ) {
			$( '.hostoo-banner-promo-full' ).slideUp() ;
			$.get( hostoo_data.ajax_url_promo + '&done=1' ) ;
		} ) ;
		$( '#hostoo-promo-later' ).click( function( event ) {
			$( '.hostoo-banner-promo-full' ).slideUp() ;
			$.get( hostoo_data.ajax_url_promo ) ;
		} ) ;

		/**
		 * Human readable time conversation
		 * @since  3.0
		 */
		if ( $( '[data-hostoo-readable]' ).length > 0 ) {
			$( '[data-hostoo-readable]' ).each(function(index, el) {
				var that = this ;
				var $input = $( this ).siblings( 'input[type="text"]' ) ;

				var txt = hostoo_readable_time( $input.val() ) ;
				$( that ).html( txt ? '= ' + txt : '' ) ;

				$input.keyup(function(event) {
					var txt = hostoo_readable_time( $( this ).val() ) ;
					$( that ).html( txt ? '= ' + txt : '' ) ;
				});
			});
		}

		/**
		 * Get server IP
		 * @since  3.0
		 */
		$( '#hostoo_get_ip' ).click( function( e ) {
			$.ajax( {
				url: hostoo_data.ajax_url_getIP,
				dataType: 'json',
				beforeSend: function ( xhr ) {
					xhr.setRequestHeader( 'X-WP-Nonce', hostoo_data.nonce ) ;
				},
				success: function( data ) {
					$( '#hostoo_server_ip' ).html( data ) ;
				}
			} ) ;
		} ) ;

		/**
		 * Click only once
		 */
		if ( $( '[data-hostoo-onlyonce]' ).length > 0 ) {
			$( '[data-hostoo-onlyonce]' ).click( function ( e ) {
				if ( $( this ).hasClass( 'disabled' ) ) {
					e.preventDefault();
				}
				$( this ).addClass( 'disabled' );
			} );
		}

		$('.new-hostoo-switch')
	}) ;
})(jQuery) ;

/**
 * Plural handler
 */
function hostoo_plural( $num, $txt )
{
	if ( $num > 1 ) return $num + ' ' + $txt + 's' ;

	return $num + ' ' + $txt ;
}

/**
 * Convert seconds to readable time
 */
function hostoo_readable_time( seconds )
{
	if ( seconds < 60 ) {
		return '' ;
	}

	var second = Math.floor( seconds % 60 ) ;
	var minute = Math.floor( ( seconds / 60 ) % 60 ) ;
	var hour = Math.floor( ( seconds / 3600 ) % 24 ) ;
	var day = Math.floor( ( seconds / 3600 / 24 ) % 7 ) ;
	var week = Math.floor( seconds / 3600 / 24 / 7 ) ;

	var str = '' ;
	if ( week ) str += ' ' + hostoo_plural( week, 'week' ) ;
	if ( day ) str += ' ' + hostoo_plural( day, 'day' ) ;
	if ( hour ) str += ' ' + hostoo_plural( hour, 'hour' ) ;
	if ( minute ) str += ' ' + hostoo_plural( minute, 'minute' ) ;
	if ( second ) str += ' ' + hostoo_plural( second, 'second' ) ;

	return str ;
}

/**
 * Trigger a click event on an element
 * @since  1.8
 */
function hostoo_trigger_click( selector )
{
	jQuery( selector ).trigger( 'click' ) ;
}

function hostoo_keycode( num ) {
	var num = num || 13 ;
	var code = window.event ? event.keyCode : event.which ;
	if( num == code ) return true ;
	return false ;
}

function hostoo_display_tab(tab) {
	jQuery('[data-hostoo-tab]').removeClass('nav-tab-active') ;
	jQuery('[data-hostoo-tab="'+tab+'"]').addClass('nav-tab-active') ;
	jQuery('[data-hostoo-layout]').hide() ;
	jQuery('[data-hostoo-layout="'+tab+'"]').show() ;
}

function hcwpEsiEnabled(the_checkbox, esi_ids) {
	var rdonly = the_checkbox.checked ? false : true;
	var len = esi_ids.length;
	for (var i = 0; i < len; i++) {
		var node_id = 'saved_' + esi_ids[i].getAttribute('id');
		var node_val = esi_ids[i].getAttribute('value');
		var prev = document.getElementById(node_id);
		if (rdonly === false) {
			esi_ids[i].removeAttribute('disabled');
			if (prev) {
				esi_ids[i].removeChild(prev);
			}
			continue;
		}
		esi_ids[i].setAttribute('disabled', true);
		if (prev !== null) {
			if (esi_ids[i].checked) {
				prev.setAttribute("value", node_val);
			}
			else {
				esi_ids[i].removeChild(prev);
			}
			continue;
		}
		else if (esi_ids[i].checked === false) {
			continue;
		}
		var hid = document.createElement("INPUT");
		hid.setAttribute("type", "hidden");
		hid.setAttribute("name", esi_ids[i].getAttribute('name'));
		hid.setAttribute("value", node_val);
		hid.setAttribute("id", node_id);
		esi_ids[i].appendChild(hid);
	}
}

// Append params to uri
function hostoo_append_param(uri, key, val) {
	var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i") ;
	var separator = uri.indexOf('?') !== -1 ? "&" : "?" ;
	if (uri.match(re)) {
		return uri.replace(re, '$1' + key + "=" + val + '$2') ;
	}
	else {
		return uri + separator + key + "=" + val ;
	}
}

function hostoo_pulse() {
	jQuery('#hostoo-shell-icon').animate({
		width: 27, height: 34,
		opacity: 1
	}, 700, function() {
		jQuery('#hostoo-shell-icon').animate({
			width: 23, height: 29,
			opacity: 0.5
		}, 700) ;
	}) ;
}

function hostoo_fetch_meta() {
	window.clearTimeout(_hostoo_shell_handle) ;
	jQuery('#hostoo-loading-dot').text('') ;
	jQuery.ajaxSetup({ cache: false }) ;
	jQuery.getJSON(_hostoo_crawler_url, function( meta ) {
		hostoo_pulse() ;
		var changed = false ;
		if ( meta && 'list_size' in meta ) {
			new_meta = meta.list_size + ' ' + meta.file_time + ' ' + meta.curr_crawler + ' ' + meta.last_pos + ' ' + meta.last_count + ' ' + meta.last_start_time + ' ' + meta.is_running ;
			if ( new_meta != _hostoo_meta ) {
				_hostoo_meta = new_meta ;
				changed = true ;
				string = _hostoo_build_meta(meta);
				jQuery('#hostoo-loading-dot').before(string) ;
				// remove first log elements
				log_length = jQuery('.hostoo-shell-body li').length;
				if ( log_length > 50) {
					jQuery('.hostoo-shell-body li:lt(' + (log_length - 50) + ')').remove();
				}
				// scroll to end
				jQuery('.hostoo-shell-body').stop().animate({
					scrollTop: jQuery('.hostoo-shell-body')[0].scrollHeight
				}, 800) ;
			}

			// dynamic adjust the interval length
			_hostoo_adjust_interval(changed) ;
		}
		// display interval counting
		hostoo_display_interval_reset() ;
		_hostoo_shell_handle = window.setTimeout(_hostoo_dynamic_timeout, _hostoo_shell_interval*1000) ;
	}) ;
}

/**
 * Dynamic adjust interval
 */
function _hostoo_adjust_interval(changed) {
	if ( changed ) {
		_hostoo_shell_interval -= Math.ceil(_hostoo_shell_interval/2) ;
	}
	else{
		_hostoo_shell_interval ++ ;
	}

	if(_hostoo_shell_interval < _hostoo_shell_interval_range[0]) {
		_hostoo_shell_interval = _hostoo_shell_interval_range[0] ;
	}
	if(_hostoo_shell_interval > _hostoo_shell_interval_range[1]) {
		_hostoo_shell_interval = _hostoo_shell_interval_range[1] ;
	}
}

function _hostoo_build_meta(meta) {
	var string = '<li>' + hostoo_date(meta.last_update_time) +
					'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Size: ' + meta.list_size +
					'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crawler: #' + (meta.curr_crawler*1+1) +
					'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position: ' + (meta.last_pos*1+1) +
					'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Threads: ' + meta.last_count +
					'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status: '
				 ;
	if ( meta.is_running ) {
		string += 'crawling, ' + meta.last_status;
	}
	else{
		string += meta.end_reason ? meta.end_reason : '-' ;
	}
	string += '</li>' ;
	return string;
}

function _hostoo_dynamic_timeout() {
	hostoo_fetch_meta() ;
}

function hostoo_display_interval_reset() {
	window.clearInterval(_hostoo_shell_display_handle) ;
	jQuery('.hostoo-shell-header-bar').data('num', _hostoo_shell_interval) ;
	_hostoo_shell_display_handle = window.setInterval(_hostoo_display_interval, 1000) ;

	jQuery('.hostoo-shell-header-bar').stop().animate({width: '100%'}, 500, function(){
		jQuery('.hostoo-shell-header-bar').css('width', '0%') ;
	}) ;
}

function _hostoo_display_interval() {
	var num = jQuery('.hostoo-shell-header-bar').data('num') ;
	jQuery('.hostoo-shell-header-bar').stop().animate({width: hostoo_get_percent(num, _hostoo_shell_interval) + '%'}, 1000) ;
	if(num > 0) num-- ;
	if(num < 0) num = 0 ;
	jQuery('.hostoo-shell-header-bar').data('num', num) ;
}

function hostoo_get_percent(num1, num2){
	num1 = num1 * 1;
	num2 = num2 * 1;
	num = (num2 - num1) / num2;
	return num * 100;
}

function _hostoo_loading_dots() {
	jQuery('#hostoo-loading-dot').append('.') ;
}

function hostoo_date(timestamp) {
	var a = new Date(timestamp * 1000) ;
	var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'] ;
	var year = a.getFullYear() ;
	var month = months[a.getMonth()] ;
	var date = hostoo_add_zero(a.getDate()) ;
	var hour = hostoo_add_zero(a.getHours()) ;
	var min = hostoo_add_zero(a.getMinutes()) ;
	var sec = hostoo_add_zero(a.getSeconds()) ;
	var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec  ;
	return time ;
}

function hostoo_add_zero(i) {
	if (i < 10) {
		i = "0" + i;
	}
	return i;
}
