<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
