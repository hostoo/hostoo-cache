<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
