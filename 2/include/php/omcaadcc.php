<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
