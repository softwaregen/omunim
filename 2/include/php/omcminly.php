<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
