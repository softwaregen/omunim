<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
