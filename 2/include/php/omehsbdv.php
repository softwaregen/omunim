<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
