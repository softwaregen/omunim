<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
