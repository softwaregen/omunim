<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
