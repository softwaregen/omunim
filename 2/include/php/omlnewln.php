<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
