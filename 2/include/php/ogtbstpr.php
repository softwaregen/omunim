<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
