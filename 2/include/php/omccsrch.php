<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
