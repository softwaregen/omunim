<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
