<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
