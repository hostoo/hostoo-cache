<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
