<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
