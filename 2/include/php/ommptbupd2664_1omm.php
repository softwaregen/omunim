<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
