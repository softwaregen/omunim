<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
