<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
