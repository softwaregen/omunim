<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
