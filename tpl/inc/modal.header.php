<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
