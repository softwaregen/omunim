<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
