<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
