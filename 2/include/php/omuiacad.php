<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
