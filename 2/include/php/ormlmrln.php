<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
