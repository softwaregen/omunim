<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
