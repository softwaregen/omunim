<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
