<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');