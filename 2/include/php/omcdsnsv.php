<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
