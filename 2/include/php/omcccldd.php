<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
