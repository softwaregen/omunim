<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
