<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
