<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
