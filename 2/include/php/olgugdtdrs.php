<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
