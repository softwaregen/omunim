<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
