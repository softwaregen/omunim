<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
