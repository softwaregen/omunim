<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
