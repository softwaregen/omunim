<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
