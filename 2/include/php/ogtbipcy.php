<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
