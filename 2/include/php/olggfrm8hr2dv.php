<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
