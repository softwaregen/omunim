<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
