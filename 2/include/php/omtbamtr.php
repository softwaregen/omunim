<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
