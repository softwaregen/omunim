<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
