<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
