<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
