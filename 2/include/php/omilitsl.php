<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
