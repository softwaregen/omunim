<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
