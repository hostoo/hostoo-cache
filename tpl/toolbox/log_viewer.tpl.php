<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
