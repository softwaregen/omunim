<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
