<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
