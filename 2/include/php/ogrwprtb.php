<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
