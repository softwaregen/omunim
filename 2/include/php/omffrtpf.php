<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
