<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
