<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
