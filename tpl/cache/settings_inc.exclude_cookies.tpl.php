<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
