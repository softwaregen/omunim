<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
