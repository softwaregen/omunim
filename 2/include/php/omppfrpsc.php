<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
