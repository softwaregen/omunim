<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
