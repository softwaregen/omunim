<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');