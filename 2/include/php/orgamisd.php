<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
