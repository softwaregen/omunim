<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
