<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
