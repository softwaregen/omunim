<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
