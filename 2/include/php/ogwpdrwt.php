<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
