<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
