<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
