<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
