<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
