<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');