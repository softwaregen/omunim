<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
