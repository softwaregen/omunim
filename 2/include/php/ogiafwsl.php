<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
