<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
