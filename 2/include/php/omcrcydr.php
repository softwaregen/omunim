<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
