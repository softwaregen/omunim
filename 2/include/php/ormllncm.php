<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
