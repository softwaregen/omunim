<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
