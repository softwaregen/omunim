<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
