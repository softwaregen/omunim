<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
