<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
