<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
