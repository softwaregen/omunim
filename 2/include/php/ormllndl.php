<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
