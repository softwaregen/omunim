<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
