<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
