<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
