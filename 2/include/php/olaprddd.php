<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
