<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
