<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
