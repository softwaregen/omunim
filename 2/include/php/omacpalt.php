<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
