<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
