<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
