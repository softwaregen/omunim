<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
