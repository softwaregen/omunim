<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
