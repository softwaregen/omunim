<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');