<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
