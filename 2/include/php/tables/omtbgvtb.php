<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');