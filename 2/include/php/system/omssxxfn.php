<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
