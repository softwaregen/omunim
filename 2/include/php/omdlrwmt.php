<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
