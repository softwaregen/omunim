<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
