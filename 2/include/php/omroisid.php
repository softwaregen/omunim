<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
