<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
