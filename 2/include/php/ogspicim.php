<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
