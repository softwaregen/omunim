<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
