<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
