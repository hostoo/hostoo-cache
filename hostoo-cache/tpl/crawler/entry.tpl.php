<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
