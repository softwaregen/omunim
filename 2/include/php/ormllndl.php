<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
