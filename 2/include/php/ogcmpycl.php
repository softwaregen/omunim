<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
