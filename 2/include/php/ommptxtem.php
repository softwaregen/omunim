<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
