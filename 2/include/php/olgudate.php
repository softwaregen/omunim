<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
