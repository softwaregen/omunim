<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
