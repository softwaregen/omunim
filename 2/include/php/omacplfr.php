<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
