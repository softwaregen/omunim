<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
