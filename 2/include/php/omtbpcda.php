<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
