<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
