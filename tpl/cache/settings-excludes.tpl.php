<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
