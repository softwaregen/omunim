<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
