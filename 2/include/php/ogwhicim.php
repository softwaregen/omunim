<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
