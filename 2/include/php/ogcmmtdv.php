<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
