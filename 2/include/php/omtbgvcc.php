<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
