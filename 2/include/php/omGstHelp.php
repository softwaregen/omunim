<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
