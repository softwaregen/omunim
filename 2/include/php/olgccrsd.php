<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
