<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
