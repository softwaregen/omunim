<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
