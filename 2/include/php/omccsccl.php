<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
