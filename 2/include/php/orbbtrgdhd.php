<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
