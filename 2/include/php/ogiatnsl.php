<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
