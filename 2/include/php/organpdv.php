<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
