<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
