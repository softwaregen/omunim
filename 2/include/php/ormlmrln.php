<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
