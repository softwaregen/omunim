<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
