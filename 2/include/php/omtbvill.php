<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
