<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
