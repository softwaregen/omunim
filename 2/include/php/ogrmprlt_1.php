<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
