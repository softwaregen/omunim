<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
