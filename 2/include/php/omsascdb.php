<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
