<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
