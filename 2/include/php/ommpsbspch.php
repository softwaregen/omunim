<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
