<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
