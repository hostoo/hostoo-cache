<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
