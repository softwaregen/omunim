<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
