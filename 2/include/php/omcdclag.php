<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
