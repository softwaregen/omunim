<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
