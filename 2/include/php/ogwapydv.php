<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
