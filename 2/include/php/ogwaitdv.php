<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
