<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
