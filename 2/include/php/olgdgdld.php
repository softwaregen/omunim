<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
