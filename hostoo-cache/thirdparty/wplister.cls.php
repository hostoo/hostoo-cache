<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
