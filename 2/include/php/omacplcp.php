<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
