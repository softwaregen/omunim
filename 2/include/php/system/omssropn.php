<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');