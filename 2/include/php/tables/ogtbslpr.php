<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');