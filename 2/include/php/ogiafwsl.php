<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
