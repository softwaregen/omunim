<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
