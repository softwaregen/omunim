<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
