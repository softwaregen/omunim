<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
