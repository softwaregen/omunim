<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
