<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');