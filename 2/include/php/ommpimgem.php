<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
