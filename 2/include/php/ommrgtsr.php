<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
