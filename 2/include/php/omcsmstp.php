<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
