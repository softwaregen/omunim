<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
