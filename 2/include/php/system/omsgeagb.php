<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');