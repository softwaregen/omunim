<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
