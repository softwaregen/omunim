<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
