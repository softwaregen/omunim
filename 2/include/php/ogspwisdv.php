<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
