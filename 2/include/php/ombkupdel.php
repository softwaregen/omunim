<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
