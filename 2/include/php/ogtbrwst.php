<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
