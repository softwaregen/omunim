<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
