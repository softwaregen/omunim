<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
