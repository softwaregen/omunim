<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
