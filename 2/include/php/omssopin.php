<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
