<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
