<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
