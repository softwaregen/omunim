<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
