<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
