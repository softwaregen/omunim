<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
