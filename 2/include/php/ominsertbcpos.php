<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');