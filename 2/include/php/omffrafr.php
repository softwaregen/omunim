<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
