<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
