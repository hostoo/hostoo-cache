<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
