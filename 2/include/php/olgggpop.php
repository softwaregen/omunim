<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
