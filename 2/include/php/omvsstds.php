<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
