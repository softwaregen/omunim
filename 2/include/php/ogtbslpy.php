<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
