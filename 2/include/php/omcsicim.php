<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
