<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
