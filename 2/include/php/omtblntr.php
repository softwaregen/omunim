<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
