<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
