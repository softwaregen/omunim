<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
