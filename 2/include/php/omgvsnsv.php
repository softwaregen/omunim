<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
