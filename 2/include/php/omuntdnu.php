<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
