<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
