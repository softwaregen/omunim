<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
