<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
