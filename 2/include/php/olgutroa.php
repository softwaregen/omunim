<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
