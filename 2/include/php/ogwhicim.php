<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
