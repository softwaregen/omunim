<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
