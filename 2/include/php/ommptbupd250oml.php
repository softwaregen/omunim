<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
