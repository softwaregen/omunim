<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
