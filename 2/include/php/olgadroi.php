<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
