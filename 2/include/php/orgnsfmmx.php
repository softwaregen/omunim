<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
