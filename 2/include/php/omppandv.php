<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
