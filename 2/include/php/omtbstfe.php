<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
