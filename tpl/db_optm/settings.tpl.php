<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
