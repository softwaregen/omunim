<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
