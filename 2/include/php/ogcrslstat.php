<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
