<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
