<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
