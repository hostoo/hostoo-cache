<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
