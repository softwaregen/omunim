<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
