<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
