<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
