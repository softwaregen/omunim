<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
