<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
