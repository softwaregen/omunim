<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');