<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
