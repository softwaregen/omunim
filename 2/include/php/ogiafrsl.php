<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
