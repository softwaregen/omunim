<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');