<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
