<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');