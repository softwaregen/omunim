<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
