<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
