<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
