<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
