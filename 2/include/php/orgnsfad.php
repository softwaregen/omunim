<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
