<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
