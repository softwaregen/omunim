<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
