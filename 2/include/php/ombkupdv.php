<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
