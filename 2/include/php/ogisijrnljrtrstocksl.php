<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
