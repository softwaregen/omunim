<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
