<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
