<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
