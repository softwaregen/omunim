<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');