<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
