<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
