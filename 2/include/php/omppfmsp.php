<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
