<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
