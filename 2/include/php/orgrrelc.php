<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
