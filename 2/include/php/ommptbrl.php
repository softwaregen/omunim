<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
