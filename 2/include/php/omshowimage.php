<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');