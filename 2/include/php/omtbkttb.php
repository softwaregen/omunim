<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
