<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
