<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
