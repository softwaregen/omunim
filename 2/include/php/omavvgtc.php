<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
