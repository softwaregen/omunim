<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
