<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
