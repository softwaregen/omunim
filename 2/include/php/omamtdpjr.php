<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
