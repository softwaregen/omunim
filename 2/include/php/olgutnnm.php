<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
