<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
