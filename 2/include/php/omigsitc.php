<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
