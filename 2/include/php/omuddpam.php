<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
