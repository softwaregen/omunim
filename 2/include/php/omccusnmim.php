<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
