<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
