<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
