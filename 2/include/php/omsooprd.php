<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
