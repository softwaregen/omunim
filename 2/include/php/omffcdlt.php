<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
