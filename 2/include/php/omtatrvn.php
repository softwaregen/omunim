<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
