<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
