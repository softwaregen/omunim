<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
