<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
