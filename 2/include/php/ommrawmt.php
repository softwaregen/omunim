<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
