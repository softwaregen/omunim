<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
