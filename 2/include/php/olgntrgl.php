<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
