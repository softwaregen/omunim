<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
