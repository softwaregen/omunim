<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
