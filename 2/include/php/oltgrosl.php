<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
