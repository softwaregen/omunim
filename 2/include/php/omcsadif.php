<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
