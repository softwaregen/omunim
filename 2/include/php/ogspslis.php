<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
