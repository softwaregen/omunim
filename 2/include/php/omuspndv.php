<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
