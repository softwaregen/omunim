<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
