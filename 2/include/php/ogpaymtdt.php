<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
