<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
