<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
