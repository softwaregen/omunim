<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
