<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
