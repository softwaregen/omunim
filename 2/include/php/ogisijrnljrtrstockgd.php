<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
