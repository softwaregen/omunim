<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');