<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
