<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
