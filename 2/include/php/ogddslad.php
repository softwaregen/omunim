<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
