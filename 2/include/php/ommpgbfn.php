<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
