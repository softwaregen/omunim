<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
