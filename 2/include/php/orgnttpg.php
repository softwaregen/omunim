<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
