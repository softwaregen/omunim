<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
