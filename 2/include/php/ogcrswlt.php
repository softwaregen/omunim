<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
