<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');