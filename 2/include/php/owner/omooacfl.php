<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
