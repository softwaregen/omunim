<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
