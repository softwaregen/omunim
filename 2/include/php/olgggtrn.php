<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
