<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
