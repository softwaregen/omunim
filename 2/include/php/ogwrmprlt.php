<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
