<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
