<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
