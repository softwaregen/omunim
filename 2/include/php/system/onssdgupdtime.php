<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');