<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
