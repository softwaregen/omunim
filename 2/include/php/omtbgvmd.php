<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
