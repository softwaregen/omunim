<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
