<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
