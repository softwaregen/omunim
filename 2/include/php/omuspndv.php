<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
