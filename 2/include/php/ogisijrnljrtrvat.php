<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
