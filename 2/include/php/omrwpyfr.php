<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
