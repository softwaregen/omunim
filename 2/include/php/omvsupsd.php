<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
