<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
