<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
