<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
