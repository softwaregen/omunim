<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
