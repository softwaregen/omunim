<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
