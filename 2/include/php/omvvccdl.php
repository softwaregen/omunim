<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
