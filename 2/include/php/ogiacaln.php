<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
