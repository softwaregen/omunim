<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
