<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
