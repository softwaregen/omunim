<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
