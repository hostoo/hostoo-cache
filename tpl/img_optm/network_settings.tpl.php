<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
