<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
