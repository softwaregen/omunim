<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
