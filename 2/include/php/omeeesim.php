<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
