<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
