<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
