<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
