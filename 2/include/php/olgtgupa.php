<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
