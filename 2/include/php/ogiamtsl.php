<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
