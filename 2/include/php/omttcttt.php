<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
