<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');