<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
