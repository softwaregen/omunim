<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
