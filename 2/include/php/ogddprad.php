<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
