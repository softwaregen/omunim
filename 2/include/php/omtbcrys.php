<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
