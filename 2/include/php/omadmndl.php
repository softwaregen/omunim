<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
