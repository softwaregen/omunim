<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
