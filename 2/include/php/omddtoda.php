<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
