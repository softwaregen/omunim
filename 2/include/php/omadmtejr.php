<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
