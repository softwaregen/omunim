<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');