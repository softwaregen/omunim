<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
