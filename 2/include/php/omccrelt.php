<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
