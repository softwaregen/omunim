<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
