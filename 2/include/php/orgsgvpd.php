<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
