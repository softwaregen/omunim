<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
