<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
