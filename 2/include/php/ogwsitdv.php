<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
