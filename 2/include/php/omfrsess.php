<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
