<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
