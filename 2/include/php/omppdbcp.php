<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
