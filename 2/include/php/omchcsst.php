<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
