<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');