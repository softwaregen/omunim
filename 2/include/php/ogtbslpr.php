<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
