<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
