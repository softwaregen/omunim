<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
