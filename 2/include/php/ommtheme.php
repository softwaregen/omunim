<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
