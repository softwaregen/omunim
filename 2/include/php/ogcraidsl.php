<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
