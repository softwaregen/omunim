<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
