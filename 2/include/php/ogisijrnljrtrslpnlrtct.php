<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');