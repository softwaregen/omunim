<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
