<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
