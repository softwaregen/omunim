<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
