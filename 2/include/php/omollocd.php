<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
