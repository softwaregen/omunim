<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
