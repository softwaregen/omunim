<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
