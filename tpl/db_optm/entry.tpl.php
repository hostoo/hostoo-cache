<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
