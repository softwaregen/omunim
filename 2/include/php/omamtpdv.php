<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
