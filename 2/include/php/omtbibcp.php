<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
