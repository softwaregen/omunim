<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');