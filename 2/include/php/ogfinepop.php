<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
