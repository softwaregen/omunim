<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
