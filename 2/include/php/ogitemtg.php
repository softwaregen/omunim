<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
