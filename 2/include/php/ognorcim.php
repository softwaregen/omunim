<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
