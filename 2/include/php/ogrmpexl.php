<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
