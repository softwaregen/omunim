<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
