<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
