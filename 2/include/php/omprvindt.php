<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');