<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
