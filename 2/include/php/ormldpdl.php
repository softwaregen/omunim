<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
