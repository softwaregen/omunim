<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
