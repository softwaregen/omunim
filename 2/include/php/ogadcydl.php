<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
