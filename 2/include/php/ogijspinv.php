<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
