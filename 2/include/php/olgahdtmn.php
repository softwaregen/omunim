<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
