<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
