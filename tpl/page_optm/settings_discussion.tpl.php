<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
