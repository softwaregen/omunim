<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
