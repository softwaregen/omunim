<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
