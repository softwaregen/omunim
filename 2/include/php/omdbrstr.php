<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
