<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
