<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');