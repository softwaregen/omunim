<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
