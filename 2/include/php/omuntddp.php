<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
