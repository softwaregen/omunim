<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
