<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
