<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
