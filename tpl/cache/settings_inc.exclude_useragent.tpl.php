<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
