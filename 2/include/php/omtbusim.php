<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
