<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
