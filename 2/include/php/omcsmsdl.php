<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
