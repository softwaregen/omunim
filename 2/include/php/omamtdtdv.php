<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
