<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
