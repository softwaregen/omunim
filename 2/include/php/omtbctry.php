<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
