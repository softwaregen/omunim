<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
