<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
