<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
