<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
