<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
