<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
