<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
