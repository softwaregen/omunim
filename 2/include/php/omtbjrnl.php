<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
