<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
