<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
