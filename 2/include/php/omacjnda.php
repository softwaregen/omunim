<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
