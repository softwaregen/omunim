<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
