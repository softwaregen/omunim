<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
