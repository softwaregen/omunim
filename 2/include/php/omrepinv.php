<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
