<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
