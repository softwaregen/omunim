<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
