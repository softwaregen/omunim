<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
