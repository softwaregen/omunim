<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
