<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
