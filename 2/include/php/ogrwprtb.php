<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
