<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
