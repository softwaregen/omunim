<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
