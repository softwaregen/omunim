<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
