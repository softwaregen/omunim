<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
