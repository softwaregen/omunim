<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
