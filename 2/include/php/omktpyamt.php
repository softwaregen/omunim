<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
