<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
