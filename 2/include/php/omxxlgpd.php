<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
