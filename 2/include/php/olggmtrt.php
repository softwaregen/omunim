<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
