<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
