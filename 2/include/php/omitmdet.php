<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');