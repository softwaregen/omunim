<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
