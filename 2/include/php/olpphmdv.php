<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
