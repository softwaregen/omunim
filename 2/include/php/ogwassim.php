<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
