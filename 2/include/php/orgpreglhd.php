<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
