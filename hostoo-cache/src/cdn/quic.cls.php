<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
