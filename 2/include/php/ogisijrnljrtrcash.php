<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
