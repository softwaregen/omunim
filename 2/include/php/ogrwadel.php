<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
