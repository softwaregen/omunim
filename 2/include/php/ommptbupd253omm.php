<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
