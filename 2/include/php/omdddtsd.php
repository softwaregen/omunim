<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
