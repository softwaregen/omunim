<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
