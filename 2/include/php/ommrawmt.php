<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
