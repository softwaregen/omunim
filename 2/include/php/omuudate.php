<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
