<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
