<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
