<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
