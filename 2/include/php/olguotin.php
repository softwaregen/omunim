<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
