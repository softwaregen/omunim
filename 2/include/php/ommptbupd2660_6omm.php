<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
