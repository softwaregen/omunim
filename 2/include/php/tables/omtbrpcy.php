<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');