<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
