<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
