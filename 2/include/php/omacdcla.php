<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
