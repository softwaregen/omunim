<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
