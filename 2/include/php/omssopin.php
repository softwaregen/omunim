<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
