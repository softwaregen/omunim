<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
