<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
