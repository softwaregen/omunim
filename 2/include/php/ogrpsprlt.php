<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
