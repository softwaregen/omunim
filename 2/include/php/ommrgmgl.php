<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
