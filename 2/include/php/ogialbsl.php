<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
