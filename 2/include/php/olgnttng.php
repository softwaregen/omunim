<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
