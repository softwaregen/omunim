<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
