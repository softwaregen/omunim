<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
