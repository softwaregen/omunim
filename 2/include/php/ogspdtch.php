<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
