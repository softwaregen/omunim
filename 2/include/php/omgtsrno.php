<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
