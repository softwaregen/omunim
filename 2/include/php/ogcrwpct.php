<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
