<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
