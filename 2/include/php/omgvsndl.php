<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
