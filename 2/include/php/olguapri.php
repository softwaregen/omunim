<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
