<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
