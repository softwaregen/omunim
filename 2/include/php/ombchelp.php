<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
