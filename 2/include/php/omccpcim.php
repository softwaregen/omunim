<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
