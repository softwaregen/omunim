<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
