<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
