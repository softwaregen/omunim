<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');