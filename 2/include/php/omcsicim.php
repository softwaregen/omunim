<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
