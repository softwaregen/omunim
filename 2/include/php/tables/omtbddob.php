<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');