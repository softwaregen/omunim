<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
