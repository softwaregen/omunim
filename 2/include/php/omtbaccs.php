<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
