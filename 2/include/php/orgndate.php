<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
