<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');