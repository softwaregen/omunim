<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
