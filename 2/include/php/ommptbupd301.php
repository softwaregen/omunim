<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
