<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');