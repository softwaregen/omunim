<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
