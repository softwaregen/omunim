<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
