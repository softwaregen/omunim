<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
