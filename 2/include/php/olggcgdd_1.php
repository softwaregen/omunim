<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');