<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
