<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
