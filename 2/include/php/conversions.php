<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
