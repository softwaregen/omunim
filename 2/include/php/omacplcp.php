<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
