<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
