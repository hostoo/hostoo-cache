<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
