<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
