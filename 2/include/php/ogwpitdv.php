<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
