<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');