<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
