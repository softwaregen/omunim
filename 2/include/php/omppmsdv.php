<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
