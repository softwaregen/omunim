<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
