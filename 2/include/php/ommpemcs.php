<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
