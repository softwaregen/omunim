<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
