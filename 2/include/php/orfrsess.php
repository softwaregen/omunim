<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
