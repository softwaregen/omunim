<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
