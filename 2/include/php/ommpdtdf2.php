<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
