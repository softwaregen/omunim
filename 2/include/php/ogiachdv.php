<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
