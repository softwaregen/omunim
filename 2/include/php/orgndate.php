<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
