<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
