<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
