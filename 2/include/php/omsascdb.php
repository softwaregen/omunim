<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
