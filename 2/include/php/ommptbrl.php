<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
