<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
