<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');