<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
