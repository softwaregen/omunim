<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
