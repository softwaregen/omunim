<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
