<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
