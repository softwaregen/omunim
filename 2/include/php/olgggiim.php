<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
