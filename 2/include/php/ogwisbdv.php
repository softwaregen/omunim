<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
