<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
