<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
