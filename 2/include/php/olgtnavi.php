<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
